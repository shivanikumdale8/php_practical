<?php
$conn = new mysqli("localhost", "root", "", "voting_system");

$candidates = $conn->query("SELECT * FROM candidates ORDER BY votes DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting Results</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="text-center text-primary">Voting Results</h2>

    <div class="card shadow p-4 mt-4">
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Candidate</th>
                    <th>Votes</th>
                </tr>
            </thead>
            <tbody>
                <?php $first = true; while ($row = $candidates->fetch_assoc()) { ?>
                    <tr class="<?php echo $first ? 'table-success fw-bold' : ''; ?>">
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['votes']; ?></td>
                    </tr>
                <?php $first = false; } ?>
            </tbody>
        </table>
        <a href="indexx.php" class="btn btn-primary w-100 mt-3">Back to Home</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
