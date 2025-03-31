<?php
$conn = new mysqli("localhost", "root", "", "voting_system");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle candidate addition
$message = "";
if (isset($_POST['add_candidate'])) {
    $name = $conn->real_escape_string($_POST['name']); // Prevent SQL injection
    $conn->query("INSERT INTO candidates (name, votes) VALUES ('$name', 0)");
    $message = "✅ Candidate added successfully!";
}

// Fetch candidates
$candidates = $conn->query("SELECT * FROM candidates ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="text-center text-primary">Admin Panel - Add Candidates</h2>

    <div class="card shadow p-4 mt-4">
        <?php if ($message): ?>
            <div class="alert alert-success"><?php echo $message; ?></div>
        <?php endif; ?>

        <form method="post">
            <div class="mb-3">
                <label class="form-label fw-bold">Candidate Name</label>
                <input type="text" name="name" class="form-control" required placeholder="Enter Candidate Name">
            </div>
            <button type="submit" name="add_candidate" class="btn btn-success w-100">Add Candidate</button>
        </form>
    </div>

    <h3 class="mt-5 text-center">Candidate List</h3>
    <table class="table table-bordered table-striped mt-3">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Votes</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $candidates->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo htmlspecialchars($row['name']); ?></td>
                    <td><?php echo $row['votes']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
