all: index.html past-events/index.html upcoming-events/index.html curriculum/index.html about/index.html old-index/index.html sponsors/index.html

clean:
	@rm index.html
	@rm hackathon/index.html

index.html: template.php page-data/index
	php page-data/index > index.html

old-index/index.html: template.php page-data/old-index
	php page-data/old-index > old-index/index.html

past-events/index.html: template.php page-data/past-events
	php page-data/past-events > past-events/index.html
	
upcoming-events/index.html: template.php page-data/upcoming-events
	php page-data/upcoming-events > upcoming-events/index.html

curriculum/index.html: template.php page-data/curriculum
	php page-data/curriculum > curriculum/index.html

about/index.html: template.php page-data/about
	php page-data/about > about/index.html

sponsors/index.html: template.php page-data/sponsors
	php page-data/sponsors > sponsors/index.html
# ok
