<?php declare(strict_types=1);

use WyriHaximus\JsCompress\Factory;

require \dirname(__DIR__) . '/vendor/autoload.php';

echo Factory::construct()->compress("<html>\r\n\t<body>\r\n\t\t<h1>Title</h1>\r\n\t<script>\r\n\t\talert(' iqeugfo wef we');\r\n\t</script>\r\n\t</body>\r\n</html>\r\n"), \PHP_EOL;
