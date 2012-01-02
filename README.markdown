# Twig Perch Extension
## Adding the extension
First you need to register the extension by adding the following line to your application.

    $twig->addExtension(new Twig_Extension_Perch());

## Using the extension
Now to use the Perch Extension in your templates you first need to call the runtime using…

    {{ perchRuntime() }}

Then add the following code in your template where you would like Perch content to show.

    {{ perchContent('Intro') }}

Replace intro with whatever you want your region to be called.