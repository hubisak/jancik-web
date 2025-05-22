<?php
// Zpracování formuláře
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $messageBody = htmlspecialchars($_POST['content']);

    // PŘIZPŮSOB TYTO DVA EMAILY
    $to   = "hubert.postulka@gmail.com";       // komu se email posílá
    $from = "marekjancik7@seznam.cz";    // od koho (Endora: musí být na doméně)

    $subject = "děda na medu";
    
    $headers  = "From: $from\r\n";
    $headers .= "Reply-To: $from\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    $body = "Zpráva z webového formuláře:\n\n" . $messageBody;

    // Odeslání
    $success = mail($to, $subject, $body, $headers);
}
?>

<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8">
  <title>Formulář pro odeslání e-mailu</title>
</head>
<body>
  <h1>Odeslat zprávu</h1>

  <?php if ($_SERVER["REQUEST_METHOD"] === "POST"): ?>
    <p>
      <?php echo $success ? "Zpráva byla úspěšně odeslána." : "Odeslání zprávy selhalo."; ?>
    </p>
  <?php endif; ?>

  <form action="" method="POST">
    <textarea name="content" rows="10" cols="50" placeholder="Zadejte zprávu..." required></textarea><br>
    <button type="submit">Odeslat email</button>
  </form>


    <footer class="container-fluid bottom-0 d-flex justify-content-around align-items-center"    style="background-color: #ff7b00; color: white; height: 5rem;">
            <div class="text-center" style="margin-top: 1rem;">
                <p>Copyright © 2010-2025 Radek Jančík</p>
            </div>
            <div class="text-center" style="margin-top: 1rem;">
                <a href="kontakty.html"><p>Kontakty</p></a>
            </div>
        </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

    </body>
</html>

