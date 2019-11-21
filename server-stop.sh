#!/bin/bash
echo "Stopping Docker Container..."
docker container stop $(docker container ls -aq) > /dev/null

echo ""
echo "Thank you for using this apps ^_^"
echo ""