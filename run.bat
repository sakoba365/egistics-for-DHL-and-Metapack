set current_path=%cd%
SCHTASKS /CREATE /SC DAILY /TN "MetaPack Daemond Process4" /TR "cmd /c cd /d %current_path% && php main.php" /ST 15:00 /RI 30