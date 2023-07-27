<?php

interface ErrorPrinter
{
    public function printingError(string $errorMessage, int $errorCode): string;
}

class JsonErrorPrinter implements ErrorPrinter
{
    public function printingError(string $errorMessage, int $errorCode): string
    {
        $error =
            "{
            \"ErrorMessage\": \"$errorMessage\",
            \"ErrorCode\": \"$errorCode\"
        }";
        return $error;
    }
}

class HtmlErrorPrinter implements ErrorPrinter
{
    public function printingError(string $errorMessage, int $errorCode): string
    {
        $error = "<html>
        <p style=\"color: red; font-size: 30px;\">Your error $errorMessage and error code is $errorCode</p>
        </html>";
        return $error;
    }
}

class PlainTextErrorPrinter implements ErrorPrinter
{
    public function printingError(string $errorMessage, int $errorCode): string
    {
        $error = "Your error: " . $errorMessage . " and error code is: " . $errorCode;
        return $error;
    }
}

// $plainTextError = new PlainTextErrorPrinter();
// echo $plainTextError->printingError("Syntax Error" , 404);

// $htmlError = new HtmlErrorPrinter();
// echo $htmlError->printingError("Missing semi-colon", 405);

$jsonError = new JsonErrorPrinter();
echo $jsonError->printingError("Missing dependency", 105);
