<?php
session_start();
$conn = new mysqli("localhost", "root", "", "voting_system");

if (!isset($_SESSION['user_id'])) {
    header("Location: indexx.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$result = $conn->query("SELECT has_voted FROM users WHERE id='$user_id'");
$user = $result->fetch_assoc();

if ($user['has_voted']) {
    echo "<script>alert('You have already voted!'); window.location.href='results.php';</script>";
    exit();
}

// Fetch candidates
$candidates = $conn->query("SELECT * FROM candidates");

if (isset($_POST['vote'])) {
    $candidate_id = $_POST['candidate_id'];
    
    $conn->query("UPDATE candidates SET votes = votes + 1 WHERE id='$candidate_id'");
    $conn->query("UPDATE users SET has_voted = 1 WHERE id='$user_id'");
    
    echo "<script>alert('Vote cast successfully!'); window.location.href='results.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vote for Your Candidate</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="text-center text-primary">Vote for Your Candidate</h2>

    <div class="card shadow p-4 mt-4">
        <form method="post" onsubmit="return confirmVote()">
            <?php while ($row = $candidates->fetch_assoc()) { ?>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="candidate_id" value="<?php echo $row['id']; ?>" required>
                    <label class="form-check-label fw-bold"><?php echo $row['name']; ?></label>
                </div>
            <?php } ?>
            <button type="submit" name="vote" class="btn btn-success mt-3 w-100">Submit Vote</button>
        </form>
    </div>
</div>

<script>
    function confirmVote() {
        return confirm("Are you sure you want to vote for this candidate?");
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
