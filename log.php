<?php
/**
 * Пишу сообщение в лог-файл.
 *
 * @param string      $message  Текст события
 * @param string      $level    Уровень: DEBUG|INFO|WARNING|ERROR|CRITICAL
 * @param string|null $filePath Путь к файлу. По умолчанию — logs/YYYY-MM-DD.log
 */
function logMessage(string $message, string $level = 'INFO', string $filePath = null): void
{
    // 1. Выбираю файл: отдельный файл на каждый день
    $filePath ??= __DIR__ . '/logs/' . date('Y-m-d') . '.log';

    // 2. Гарантирую, что каталог для логов существует
    $dir = dirname($filePath);
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }

    // 3. Формирую запись: [2025-06-25 14:23:08] [INFO] Текст
    $entry = sprintf(
        "[%s] [%s] %s%s",
        date('Y-m-d H:i:s'),
        strtoupper($level),
        $message,
        PHP_EOL
    );

    // 4. Пишу, добавляя в конец и блокируя файл на время записи
    file_put_contents($filePath, $entry, FILE_APPEND | LOCK_EX);
}