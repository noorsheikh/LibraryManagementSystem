# Library Management System

Silex PHP Framework based RESTful Web APIs for Library Management System.

## Development Settings

How to setup this localy

### Prerequisities:

- PHP 7
- Composer (https://getcomposer.org/)
- SQLite 3 or above

### PHP Libraries (Symfony Components) used:

- doctrine/dbal
- symfony/console
- fzaninotto/faker

### Configuration

Following are the details for downloading and setting up local development environment

Clone the repository to your local development directory
```
git clone https://github.com/noorsheikh/LibraryManagementSystemRESTAPIs.git
```
Then run the below command in terminal:
```
composer install
```

## Generating Data Fixture

The below command need to be run through terminal from the root directory of the project.
```
php ./bin/console library:generate:book-and-copies <total no. of books> <total no. of copies for each book>
```

#### Example command

The below command will generate 50 books with each book having 3 copies available
```
php ./bin/console library:generate:book-and-copies 50 3
```

## API Endpoints

Base URL: http://localhost:8888/LibraryManagementSystemRESTAPIs/library

| Endpoint   | Description |
| :-----------  | :----------- |
| /add-book    |   Add a new book to the library with or without multiple copies. |
| /add-copies    |   Add new copies for a book. |
| /books  |   Display list of all the books in library. |
| /book/{id}   |   Display details for a single book. |
| /available-books |   Display list of all available books. |
| /add-borrower |   Add a new borrower or membership for a person. |
| /update-borrower/{id} |   Update borrower information for a person. |


## Testing APIs locally

For testing APIs locally download the following Chrome extension [Advanced REST client](https://chrome.google.com/webstore/detail/advanced-rest-client/hgmloofddffdnphfgcellkdfbfbjeloo) locally and lunch the App after downloading.

## Unit Testing

Use the below command through terminal to run the unit tests:
```
./test.sh
```