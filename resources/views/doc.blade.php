<!DOCTYPE html>
<html lang="en">

<head>
    <meta data-n-head="true" data-hid="charset" charset="utf-8" />
    <meta data-n-head="true" data-hid="mobile-web-app-capable" name="mobile-web-app-capable" content="yes" />
    <title data-n-head="true">API Documentation | Koin CMS</title>
    <link data-n-head="true" rel="shortcut icon" type="image/png" href="https://siamonsi.files.wordpress.com/2014/04/cms-image.jpg" />
    <link data-n-head="true" rel="apple-touch-icon" href="https://siamonsi.files.wordpress.com/2014/04/cms-image.jpg" sizes="512x512" />
    <link data-n-head="true" rel="canonical" href="https://siamonsi.files.wordpress.com/2014/04/cms-image.jpg" />
    <link href="https://fonts.googleapis.com/css?family=Muli|Righteous" rel="stylesheet">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
    <style>
        body {
            margin-top: -30px;
        }
    </style>
    <script>
        window.console = window.console || function(t) {};
        if (document.location.search.match(/type=embed/gi)) {
            window.parent.postMessage("resize", "*");
        }
    </script>
</head>

<body translate="no">
    <div class="container-fluid">
        <div class="jumbotron">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="text-center" style="font-size: 30pt;">Koin - Koin CMS</h1>
                    <h2 class="text-center" style="font-size: 16pt;margin-top: 10px"><em>API Documentation</em></h2>

                    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1" style="margin-top: 30px">
                        <h3><em>Overview</em></h3>
                        This section contain an overview of the data provided and the API purpose. We built the API to be as self-documenting as possible. This document is, as its name suggests, for reference only. Our API supports a data response in JSON format and totally free.
                        <h3><em>API Reference</em></h3>
                        <ul>
                            <li>Get News & Ads</li>
                              <ul>
                                <li>Endpoint for knowing your own IP and METHOD GET.<pre>{{ env('APP_URL') }}/api/news_ads</pre></li>
                              </ul>
                            <br/>
                            <li>Category</li>
                              <ul>
                                <li>Endpoint for knowing your own IP and METHOD GET.<pre>{{ env('APP_URL') }}/api/category</pre></li>
                              </ul>
                            <br/>
                          </ul>
                        </div>
                </div>
            </div>
        </div>
        <footer class="text-center">
            <hr>
            <p>Koin CMS</p>
        </footer>
    </div>
</body>

</html>