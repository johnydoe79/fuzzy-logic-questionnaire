<?php

namespace App\Controller;

use App\Entity\Answer;
use App\Entity\Question;
use App\Entity\TestResult;
use App\Service\UserIdentifierService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    private EntityManagerInterface $entityManager;
    private UserIdentifierService $userIdentifierService;

    public function __construct(EntityManagerInterface $entityManager, UserIdentifierService $userIdentifierService)
    {
        $this->entityManager = $entityManager;
        $this->userIdentifierService = $userIdentifierService;
    }

    #[Route('/test', name: 'test_index', methods: ['GET'])]
    public function index(): Response
    {
        $questions = $this->entityManager->getRepository(Question::class)->findAll();

        // Перемешиваем вопросы
        shuffle($questions);

        // Перемешиваем ответы для каждого вопроса
        foreach ($questions as $question) {
            $answers = $question->getAnswers()->toArray();
            shuffle($answers);
        }

        return $this->render('index.html.twig', [
            'questions' => $questions,
        ]);
    }

    #[Route('/test/submit', name: 'test_submit', methods: ['POST'])]
    public function submit(Request $request): Response
    {
        $submittedAnswers = $request->request->all('answers'); // Получаем все данные из формы
        $userIdentifier = $this->userIdentifierService->getUserId();

        // Создаем результат теста
        $testResult = new TestResult();
        $testResult->setUserId($userIdentifier);

        $correctResults = [];
        $incorrectResults = [];

        // Получаем все вопросы
        $questions = $this->entityManager->getRepository(Question::class)->findAll();

        // Перебираем все вопросы
        foreach ($questions as $question) {
            $questionId = $question->getId();
            $selectedAnswers = $submittedAnswers[$questionId] ?? [];

            // Получаем правильные ответы
            $correctAnswers = $question->getAnswers()->filter(function ($answer) {
                return $answer->isCorrect();
            })->map(function ($answer) {
                return $answer->getId();
            })->toArray();

            $selectedAnswers = array_map('intval', (array) $selectedAnswers);

            // Проверка, если пользователь не выбрал никакого ответа
            if (empty($selectedAnswers)) {
                $isCorrect = false;
            } else {
                // Определяем правильность ответа
                $isCorrect = empty(array_diff($selectedAnswers, $correctAnswers));
            }

            // Создаем TestResult для каждого вопроса
            $testResult->addQuestionResult((int) $questionId, $isCorrect);

            if ($isCorrect) {
                $correctResults[] = $question;
            } else {
                $incorrectResults[] = $question;
            }
        }

        $this->entityManager->persist($testResult);
        $this->entityManager->flush();

        return $this->render('results.html.twig', [
            'correctResults' => $correctResults,
            'incorrectResults' => $incorrectResults,
        ]);
    }
}