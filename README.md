<!-- Gratitude to resources from which I based this template; https://github.com/othneildrew/Best-README-Template/ , https://github.com/afonsopacifer/open-source-boilerplate/ -->
<a id="readme-top"></a>
<!-- ***  -->

<!-- PROJECT SHIELDS -->
<!--
*** See the bottom of this document for the declaration of the reference variables
*** for contributors-url, forks-url, etc. This is an optional, concise syntax you may use.
*** https://www.markdownguide.org/basic-syntax/#reference-style-links
-->
[![LinkedIn][linkedin-shield]][linkedin-url]

# Block Theme Header Exercise

<!-- PROJECT LOGO -->
<!-- 
*** Would have been nice to use reference-style for the project logo, plus resize dimensions
*** as described on https://docs.gitlab.com/ee/user/markdown.html#change-the-image-or-video-dimensions
*** however vscode preview acts up without the use of an extension
-->
<!-- ![alt-text1](images/sample.png "Project Logo"){width=100 height=100px} -->

<!-- PROJECT DEMO & DOCS LINKS -->
<br />
<div style="text-align:center">
  <a href="#">
    <img src="images/imagesWordpress-Logo.svg.png" alt="Logo" width="120" height="121">
  </a>
  <p style="text-align:center">
    <br />
    <a href="#"><strong>Explore the project »</strong></a>
    <br />
  </p>
</div>

## Project Summary

![Product Name Screen Shot][product-screenshot-1]
![Product Name Screen Shot][product-screenshot-2]

An exercise in reverse engineering an existing header via Full Site Editing and custom block theme building.

### Overview

This exercise was very exciting. A lot changed with WordPress since earlier versions. The overall approach taken was to build from ground up rather than copying a default theme, however template parts and patterns are useful.

### Tech Stack & Tools

* Languages: CSS, JSON, HTML; minimal: JavaScript, PHP
* Tools: wp-env (Docker Desktop, Node/NPM, WSL2), PhpStorm
* Database backup: can be found at .\db backup\

### Notes

* UX decision to position mobile-toggle menu icon lower from top of mobile display, plus fill for visibility
* Example mega menu appears to be a plugin, may require custom block creation
* Editor preview style vs the browser style has slight discrepancies but doesn't affect overall theme

### Challenges

* Submenu appearance is affected by the cover block overflow property as well as minimum height field in editor.
    * This might be resolved by opting for a background image via style rule rather than using a cover block, or exploring another block container option that allows for background image while not altering the overall header height.
    * Less preferred option is a compromise for smaller than expected image on page header while preserving big menu and submenu appearance, applicable to mobile display.

    - [x] Relatively easy fix by cropping a copy to the desired height was applied however text color was set in editor to counter the is-light generated rules.

### Lessons Learned

* Nice to do: clean up template parts markup and incorporate more default styles into theme.json rather than inline css
* Full Site Editing: Overall workflow and familiarity with appearance editor shall improve with practice
* Learning curve: moving from XAMPP to a Dockerized workflow with wp-env

## Nota bene

<!-- _This is simply a place for various publicly stored snippets and programming exercises._ -->

Perhaps you're visiting from my [LinkedIn Profile](https://www.linkedin.com/in/seann-kearney/).
If you're interested in viewing private projects at my GitLab please contact me. I'll allow access to a guest account.

Thanks for popping by! Best regards, SK.

<!-- ## [Find Snippets Here](https://doobin.ddns.net/tahanan/garden/<url>/-/snippets)

That's where they'll be. -->

<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://linkedin.com/in/seann-kearney
[product-screenshot-1]: images/sa1-header-bvi.png
[product-screenshot-2]: images/sa2-header-bvi.png
