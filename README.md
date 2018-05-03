# ko-lab.space-API
A collection of our API's on our website with documentation.
The following parts will handle each "folder":

## [hackeragenda.be](hackeragenda.be)
Hackeragenda.be is a collection (agenda) of Belgian hackerspaces/tech/artistic events. You can add sources yourself via following GitHub-repo:
-   [https://github.com/YoloSwagTeam/hackeragenda](https://github.com/YoloSwagTeam/hackeragenda)

For Ko-Lab, I implemented the "Hackeragenda API"; following the guidelines (and examples in the agenda's) and implemented it on our WordPress-website: [https://ko-lab.space/hackeragenda/](https://ko-lab.space/hackeragenda/)

Our website uses the "event organiser" plugin for WordPress for events, you can find useful info here:
-   [https://wordpress.org/plugins/event-organiser/](https://wordpress.org/plugins/event-organiser/)
-   [http://codex.wp-event-organiser.com/](http://codex.wp-event-organiser.com/)
-   [http://docs.wp-event-organiser.com/](http://docs.wp-event-organiser.com/)

You can view the code in the "hackeragenda.php"-file.
I used comments to explain what I've done.
Don't hesitate to ask any questions.

### Placement in WordPress
1.  Add the file in your active theme directory.
2.  Make a new page in WordPress: template = "HACKERAGENDA"
3.  (Text in WordPress textarea can be used for info about the page)

Note: This isn't the best way to add this to your WordPress theme. It is advised to make a child theme.

## [spaceapi.net](spaceapi.net)
or here [https://spaceapi.fixme.ch/](https://spaceapi.fixme.ch/)

SpaceAPI aims to include all hackerspace API's on it's website.
To add your hackerspace, send a pull request in this GitHub-repo:
-   [https://github.com/spaceapi/](https://github.com/spaceapi/)

For Ko-Lab, you can view our API on our website: [https://ko-lab.space/spaceapi/](https://ko-lab.space/spaceapi/).

You can view the code in the "spaceapi.php"-file.
I used comments to explain what I've done.
Don't hesitate to ask any questions.

### Placement in WordPress
1.  Add the file in your active theme directory.
2.  Make a new page in WordPress: template = "SPACEAPI"
3.  (Text in WordPress textarea can be used for info about the page)

Note: This isn't the best way to add this to your WordPress theme. It is advised to make a child theme.
