<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Syntax</title>
</head>
<body>
    <h1>Syntax Overview</h1>

    <div class="container">
        <h2>Canonical PHP tags</h2>
        <?php
        echo "<pre>&lt;?php...?&gt;</pre>";
        ?>
    </div>

    <div class="container">
        <h2>Short-open (SGML-style) tags</h2>
        <?php
        echo "<pre>&lt;?...?&gt;</pre>";
        ?>
    </div>

    <div class="container">
        <h2>SASP-style tags</h2>
        <?php
        echo "<pre>&lt;%...%&gt;</pre>";
        ?>
    </div>

    <div class="container">
        <h2>SASP-style tags</h2>
        <?php
        echo "<pre>&lt;script language=\"PHP\"&gt;...&lt;/script&gt;</pre>";
        ?>
    </div>

    <div class="container">
        <h2>Single-line comments</h2>
        <?php
        echo "<pre>&lt;?\n# This is a comment, and\n# This is the second line of the comment\n// This is a comment too. Each style comments only\nprint \"An example with single line comments\";\n?&gt;</pre>";
        ?>
    </div>

    <div class="container">
        <h2>Multi-lines Printing</h2>
        <?php
        echo "<pre>&lt;?php\n# First Example\nprint &lt;&lt;&lt;END\nThis uses the \"here document\" syntax to output\nmultiple lines with \$variable interpolation. Note\nthat the here document terminator must appear on a\nline with just a semicolon no extra whitespace!\nEND;\n# Second Example\nprint \"This spans\nmultiple lines. The newlines will be\noutput as well\";\n?&gt;</pre>";
        ?>
    </div>

    <div class="container">
        <h2>Multi-lines comments</h2>
        <?php
        echo "<pre>&lt;?php\n/* This is a comment with multiline\nAuthor : Mohammad Mohtashim\nPurpose: Multiline Comments Demo\nSubject: PHP\n*/\nprint \"An example with multi line comments\";\n?&gt;</pre>";
        ?>
    </div>

    <div class="container">
        <h2>PHP is whitespace insensitive</h2>
        <?php
        echo "<pre>&lt;?php\n\$four = 2 + 2; // single spaces\n\$four = 2 + 2; // spaces and tabs\n\$four = 2 +\n        2; // multiple lines\n?&gt;</pre>";
        ?>
    </div>

    <div class="container">
        <h2>PHP is case sensitive</h2>
        <?php
        echo "<pre>&lt;?php\necho '&lt;html&gt;&lt;body&gt;';\n\$capital = 67;\nprint(\"Variable capital is \$capital&lt;br&gt;\");\nprint(\"Variable CaPiTaL is \$CaPiTaL&lt;br&gt;\");\necho '&lt;/body&gt;&lt;/html&gt;';\n?&gt;\nThis will produce the following result:\nVariable capital is 67\nVariable CaPiTaL is</pre>";
        ?>
    </div>

    <div class="container">
        <h2>Statements are expressions terminated by semicolons</h2>
        <?php
        echo "<pre>&lt;?php\n\$greeting = \"Welcome to PHP!\";\n?&gt;</pre>";
        ?>
    </div>

    <div class="container">
        <h2>Braces make blocks</h2>
        <?php
        echo "<pre>&lt;?php\nif (3 == 2 + 1)\n    print(\"Good - I haven't totally lost my mind.&lt;br&gt;\");\nif (3 == 2 + 1)\n{\n    print(\"Good - I haven't totally\");\n    print(\"lost my mind.&lt;br&gt;\");\n}\n?&gt;</pre>";
        ?>
    </div>

    <div class="container">
        <h2>Running PHP Script from Command Prompt</h2>
        <?php
        echo "<pre>&lt;?php\necho \"Hello PHP!!!!!\";\n?&gt;\nNow run this script as command prompt as follows:\n$ php test.php\nIt will produce the following result\nHello PHP!!!!</pre>";
        ?>
    </div>
</body>
</html>