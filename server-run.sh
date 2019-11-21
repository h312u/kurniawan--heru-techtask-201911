#!/bin/bash
echo "Installing Package..."
composer install --quiet
wait

echo ""
echo "Preparing and Building Docker Images..."
docker-compose build > /dev/null
wait

echo ""
echo "Starting Docker Container..."
docker-compose up -d

echo ""
echo "Server ready on http://127.0.0.1:8080/"
echo ""