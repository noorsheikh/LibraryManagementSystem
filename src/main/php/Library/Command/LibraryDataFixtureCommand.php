<?php

namespace Library\Command;

use Silex\Application;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

use Library\Fixture\LibraryDataFixture;

class LibraryDataFixtureCommand extends Command
{
    private $libraryDataFixture;

    public function __construct(LibraryDataFixture $libraryDataFixture)
    {
        parent::__construct();
        $this->libraryDataFixture = $libraryDataFixture;
    }

    protected function configure(): void
    {
        $this
            ->setName('library:generate:book-and-copies')
            ->setDescription('Generate fake data for library database')
            ->setHelp('This command allow you to generate pre-populated fake data for your library application.')
            ->addArgument('totalBooks', InputArgument::REQUIRED, 'The number of books to be generated.')
            ->addArgument('totalCopies', InputArgument::OPTIONAL, 'The number of copies to be generated for each book.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): void
    {
        $output->writeln('Start generating fake data for library.');
        $output->writeln('Started...');

        $totalBooks = $input->getArgument('totalBooks');
        $totalCopies = $input->getArgument('totalCopies');

        $this->libraryDataFixture->process($totalBooks, $totalCopies);

        $output->writeln('Finished!');
    }
}
