<!DOCTYPE html>
<html>
<head>
    <title>Multi-Form Example</title>
    <style>
        .hide {
            display: none;
        }
    </style>
</head>
<body>
    <h1>Multi-Form Example</h1>

    <?php
    $step = isset($_GET['step']) ? $_GET['step'] : 1;
    ?>

    <form id="step1" class="form-step <?php if ($step != 1) echo 'hide'; ?>" action="process.php?step=2" method="post">
        <h2>Step 1</h2>
        <input type="text" name="field1" placeholder="Field 1" required />
        <input type="submit" value="Next" />
    </form>

    <form id="step2" class="form-step <?php if ($step != 2) echo 'hide'; ?>" action="process.php?step=3" method="post">
        <h2>Step 2</h2>
        <input type="text" name="field2" placeholder="Field 2" required />
        <input type="submit" value="Next" />
    </form>

    <form id="step3" class="form-step <?php if ($step != 3) echo 'hide'; ?>" action="process.php?step=4" method="post">
        <h2>Step 3</h2>
        <input type="text" name="field3" placeholder="Field 3" required />
        <input type="submit" value="Submit" />
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".form-step").submit(function(e) {
                e.preventDefault(); // Prevent form submission

                var currentForm = $(this);
                var nextFormId = currentForm.attr('id') + " + .form-step";
                var nextForm = $(nextFormId);

                currentForm.addClass("hide");
                nextForm.removeClass("hide");
            });
        });
    </script>
</body>
</html>