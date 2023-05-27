<?php
    require 'templates/header.php';
?>

    <div class="content-container">
        <div class="project-section">
            <div class="project">
                <h1>Lexical Analyzer</h1>
                <p>The Lexical Analyzer Project is a program developed by Bemnet Mekrebu for UNT Honors contract. The project aims to perform lexical analysis on input expressions or files, identifying and categorizing different tokens such as identifiers, keywords, constants, string literals, and punctuators. The program provides a detailed analysis of the tokens found, including their type and count. It utilizes concepts of tokenization, error handling, and character processing to perform the lexical analysis.</p>

                <p>Technologies in use:</p>
                <ul>
                    <li>   C programing language</li>
                    <li>   Standard C libraries</li>
                    <li>   Input Buffer</li>
                    <li>   Finite state automata</li>
                </ul>

                <p>Concepts and Features:</p>
                <ol>
                    <li>Tokenization: The program breaks down input expressions or files into individual tokens, categorizing them based on their type.</li>
                    <li>Error Handling: The program handles errors during the lexical analysis process, providing useful error messages to assist with debugging.</li>
                    <li>Character Processing: The program processes characters one by one, skipping whitespace and identifying different token patterns.</li>
                    <li>Token Types: The program recognizes and classifies tokens into five types: identifiers, keywords, constants, string literals, and punctuators.</li>
                    <li>Analysis and Counting: The program keeps track of the count of each token type and provides a final analysis summary at the end.</li>
                
                </ol>
            </div>
        </div>

        <div class="project-section">
            <div class="project">
                <h1>Custom Linux Shell</h1>
                <p>The project is a custom Linux command line interpreter implemented in C. It allows users to interact with the shell by entering commands and executes them accordingly. The interpreter supports various features such as executing single commands, handling pipes for command chaining, input/output redirection, changing the directory, managing the system's PATH variable, handling signals (SIGINT and SIGTSTP), and batch execution from a file.</p>

                <p>Technologies in use:</p>
                <ul>
                    <li>   C programing language</li>
                </ul>

                <p>Concepts and Features:</p>
                <ol>
                    <li>Command Line Interface: The interpreter provides a command line interface for users to interact with the shell.</li>
                    <li>Process Creation and Management: The project involves creating and managing processes to execute commands.</li>
                    <li>Command Execution: The interpreter executes single commands and handles built-in commands like changing the directory, managing the PATH variable, and exiting the shell.</li>
                    <li>Pipe Implementation: The interpreter supports chaining commands using pipes to pass output from one command as input to another.</li>
                    <li>Input/Output Redirection: The interpreter handles input and output redirection, allowing users to redirect input from a file and redirect output to a file.</li>
                    <li>Signal Handling: The project implements signal handling for signals like SIGINT (interrupt signal - Ctrl+C) and SIGTSTP (stop signal - Ctrl+Z) to provide appropriate responses.</li>
                    <li>Batch Execution: The interpreter can read and execute commands from a batch file.</li>
                
                </ol>
            </div>
        </div>

        <div class="project-section">
            <div class="project">
                <h1>Web Scraping and Sentiment Analysis</h1>
                <p>The project is a web scraping program built using Flask and deployed on Heroku. It performs sentiment analysis on the status of the Ukraine war. The program is written in Python and utilizes various libraries and tools for web scraping, data extraction, and email notification.</p>

                <p>Technologies in use:</p>
                <ul>
                    <li>   Python programming language</li>
                    <li>   Flask framework for web development</li>
                    <li>   Heroku platform for deployment</li>
                    <li>   Chrome WebDriver for web scraping</li>
                    <li>   Pandas library for data manipulation</li>
                </ul>

                <p>Concepts and Features:</p>
                <ol>
                    <li>Web Scraping: The program uses web scraping techniques to extract data from the web. It utilizes the Chrome WebDriver to navigate web pages and locate specific elements.</li>
                    <li>Sentiment Analysis: The project performs sentiment analysis on the extracted data related to the Ukraine war. It analyzes the sentiment and tone of news articles or updates to determine the overall status of the war.</li>
                    <li>Data Manipulation: The program uses the Pandas library to manipulate and organize the extracted data. It creates a DataFrame to store the relevant information in a structured format.</li>
                    <li>Email Notification: The project incorporates the smtplib library to send email notifications. It sends an email with the extracted data, such as the total number of deaths, to a specified email address.</li>
                    <li>Web Development and Deployment: The program is built using the Flask framework, allowing it to serve as a web application. It is deployed on the Heroku platform, making it accessible online.</li>
                </ol>
            </div>
        </div>
    </div>
</body>