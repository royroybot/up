<?php
$logs = file('tracking.log');
echo "<h1>Log Pelacakan</h1>";
echo "<table border='1'><tr><th>Waktu</th><th>IP</th><th>Lokasi</th><th>Perangkat</th><th>URL Tujuan</th></tr>";

foreach ($logs as $log) {
    $data = json_decode($log, true);
    echo "<tr>";
    echo "<td>" . htmlspecialchars($data['timestamp']) . "</td>";
    echo "<td>" . htmlspecialchars($data['ip']) . "</td>";
    echo "<td>" . htmlspecialchars($data['location']) . "</td>";
    echo "<td>" . htmlspecialchars($data['user_agent']) . "</td>";
    echo "<td>" . htmlspecialchars($data['target_url']) . "</td>";
    echo "</tr>";
}

echo "</table>";
?>