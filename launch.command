#!/bin/bash
#
# Westmont Nails — one-click local launcher
# Double-click this file in Finder to start the website.
# (To stop the site, just close this Terminal window or press Ctrl+C.)
#
cd "$(dirname "$0")" || exit 1

# Pick the first free port starting at 8000
PORT=8000
while lsof -i ":$PORT" >/dev/null 2>&1; do
  PORT=$((PORT + 1))
done

URL="http://localhost:$PORT"

echo ""
echo "  💅  Westmont Nails"
echo "  ──────────────────────────────"
echo "  Starting the website..."
echo "  Open in browser:  $URL"
echo "  (Close this window or press Ctrl+C to stop.)"
echo ""

# Make sure PHP is available
if ! command -v php >/dev/null 2>&1; then
  echo "  ⚠️  PHP is not installed."
  echo "     Install it with:  brew install php"
  echo ""
  read -r -p "  Press Enter to close..."
  exit 1
fi

# Open the browser a moment after the server starts
( sleep 1; open "$URL" ) &

# Start the PHP server (runs until you close the window)
php -S "localhost:$PORT"
