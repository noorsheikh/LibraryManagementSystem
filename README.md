# Library Management System

Silex PHP Framework based RESTful Web APIs for Library Management System.

## Development Settings

How to setup this localy

### Prerequisities

- PHP 5.6
- Composer (https://getcomposer.org/)
- SQLite 3 or above

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

## API Endpoints

Base URL: http://localhost:8888/LibraryManagementSystem/library

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