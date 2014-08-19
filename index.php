<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <!--The meta tags will make sure the site displays properly on mobile/hand held devices-->
        <meta name="viewport" content="width=device-width">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <title>Theme Development</title>
    </head>
    <body>
        <div id="container">
            
            <header>
                <em>Header:</em> background image and text elements for header
                will go inside this div.
            </header><!--//header-->
            <!-- Begin #container2 this holds the content and sidebars-->
            <div id="container2">
                <!-- Begin first section holds the left content columns-->
                <section>
                    <!-- Begin content -->
                    <article>
                        <em>Main Content:</em> Post content will go here inside this div.
                    </article>
                </section>
                <!-- Second section holds the right columns-->
                <section>
                    <!-- #left sidebar -->
                    <aside class="sidebar1">
                        <em>Left Side Bar:</em> Will contain WordPress content related
                        links
                    </aside><!--//.sidebar1  -->
                    <!-- #right sidebar -->
                    <aside class="sidebar2">
                        <em>Right Side Bar:</em> This will include additional ads, or non-
                        content relevant items.
                    </aside><!--//.sidebar2-->
                </section>
            </div><!--//#container2-->
            <nav id="mainNav">
                <em>Top Nav:</em> For reading through straight text, it's best to
                have links at bottom (css will place it up top, for visual ease of
                use)
            </nav><!--//mainNav-->
        </div><!--//container-->
        <footer>
            <em>Footer:</em> Useful information and quick links for CSS design
            users who've had to scroll to the bottom plus site information and
            copyright will go here
        </footer>
    </div>
</body>
</html>
