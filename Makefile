default: dev

dev:
	concurrently --names="SERVE,WATCH" "make serve" "make watch" -c "bgBlue.bold,bgMagenta.bold"

require:
	composer require "datashaman/tongs:@dev" \
		"datashaman/tongs-feed:@dev" \
		"datashaman/tongs-metadata:@dev" \
		"datashaman/tongs-more:@dev" \
		"datashaman/tongs-permalinks:@dev" \
		"datashaman/tongs-sass:@dev"

serve:
	php -S 127.0.0.1:8080 -t build

watch:
	while inotifywait -r -e modify -e close_write src views tongs.json ../*; do tongs; done
