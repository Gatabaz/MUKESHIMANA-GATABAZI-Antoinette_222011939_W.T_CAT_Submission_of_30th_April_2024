<?php
// Check if the 'query' GET parameter is set
if (isset($_GET['query']) && !empty($_GET['query'])) {
    // Connection details
    include "dbconnection.php";

    // Sanitize input to prevent SQL injection
    $searchTerm = $connection->real_escape_string($_GET['query']);

    // Queries for different tables
    $queries = [
        'actors' => "SELECT email FROM actors WHERE email LIKE '%$searchTerm%'",
        'filmmaker' => "SELECT id FROM filmmaker WHERE id LIKE '%$searchTerm%'",
        'invvestors' => "SELECT id  FROM investors WHERE id LIKE '%$searchTerm%'",
        'investment' => "SELECT prajectname FROM investment WHERE telephone LIKE '%$searchTerm%'",
        'projects' => "SELECT id FROM projects WHERE id LIKE '%$searchTerm%'",
        'contract' => "SELECT id FROM contract WHERE id LIKE '%$searchTerm%'",
        'signin' => "SELECT firstname FROM signin WHERE firstname LIKE '%$searchTerm%'"
    ];

    // Output search results
    echo "<h2><u>Search Results:</u></h2>";

    foreach ($queries as $table => $sql) {
        $result = $connection->query($sql);
        echo "<h3>Table of $table:</h3>";
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<p>" . $row[array_keys($row)[0]] . "</p>"; // Dynamic field extraction from result
            }
        } else {
            echo "<p>No results found in $table matching the search term: '$searchTerm'</p>";
        }
    }

    // Close the connection
    $connection->close();
} else {
    echo "<p>No search term was provided.</p>";
}
?>
