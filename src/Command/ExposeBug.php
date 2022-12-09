<?php

declare(strict_types=1);

namespace App\Command;

use App\Service\BuggyService;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'expose:bug',
    description: 'This command exposes a bug with lazy services',
)]
class ExposeBug extends Command
{
    public function __construct(private BuggyService $buggyService)
    {
        parent::__construct();
    }

    public function execute(InputInterface $input, OutputInterface $output): int
    {
        ($this->buggyService)();

        return Command::SUCCESS;
    }
}
