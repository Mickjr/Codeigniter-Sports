###################
<h1> Codeigniter-Sports </h1>
###################

<pre>CodeIgniter is an Application Development Framework - a toolkit - for people
who build web sites using PHP. Its goal is to enable you to develop projects
much faster than you could if you were writing code from scratch, by providing
a rich set of libraries for commonly needed tasks, as well as a simple
interface and logical structure to access these libraries. CodeIgniter lets
you creatively focus on your project by minimizing the amount of code needed 
for a given task. </pre>

###################
<h2> Idle Timeout </h2>
###################

<pre>Idle timeout was added to monitor the the action of the user if he/she decides to walk away from their computer.
It has been added as a precautionary measure.</pre>

###################
<h2> HMVC Structure </h2>
###################

<pre>The main controller doesn’t need to know about it, and is totally isolated from it. In CI we can’t call more than 1 controller per request. 
Therefore, to achieve HMVC, we have to simulate controllers. It can be done with libraries, or with this “Modular Extensions HMVC” contribution.

The differences between using a library and a “Modular HMVC” HMVC class is:

No need to get and use the CI instance within an HMVC class
HMVC classes are stored in a modules directory as opposed to the libraries directory.</pre>


###################
<h2> Public Folder </h2>
###################

<pre>A better way to organise your folders would be:

    root
        code_igniter
            application_folder
                config
                controllers
                models
                ...
            system_folder
        public_html
            css
            js
            images index.php .htaccess </pre>


