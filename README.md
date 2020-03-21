# PSL-Leaderboard-System
A simple and open source Leaderboard system written in PHP.

IMPORTANT: PSL is insecure. It can be manipulated by spying the network traffic or by decompiling your application. Use at your own risk.


### What can you do with PSL?
```
-Add name and score by a simple web request
-Get every registered name + score
```

### What do I need?
```
-Webserver (with PHP support)
-MySQL Database
```

### I don't know anything about servers, am I still able to use PSL?
Of course! With the second part of the following tutorial you can set up your own free and simple leaderboard system in 5 minutes!

### Tutorial
*Simple Explanation*<br>
Download the five scripts which are listed down below. Then you have to change in four scripts the login data for your database and in 2 scripts you have to choose a password for the administration panel. After that, uploud the scripts to your webserver. Open in your webbrowser http://yourserver.com/setup.php. When completed, it created a table in the database for the leaderboard. Now you can add a new score with http://yourserver.com/addScore.php?name=username&score=100 and get a list of all scores with http://yourserver.com/getScore.php. Below are some code samples for Unity/C#.<br><br>


*Explanation for beginners*<br>
Firstly, download the five scripts which are listed down below, you need it later. <br>
In our example we will use https://www.000webhost.com/. They offer us a webserver and a MySQL server. Firsty you have to create an account.
Enter a name and a password for your site and write it down so you don't forget it!<br>
<img alt="Step 1" src="https://github.com/louis-e/PSL-Leaderboard-System/blob/master/img/step1.png" width="550" height="400">

In the next step it will tell you to choose a method. You have to choose "Uploud Your Existing Website".<br>
<img alt="Step 2" src="https://github.com/louis-e/PSL-Leaderboard-System/blob/master/img/step2.png" width="700" height="400">

After that it will open a new tab. It should look like in the picture below. Don't close it.<br>
<img alt="Step 3" src="https://github.com/louis-e/PSL-Leaderboard-System/blob/master/img/step3.png" width="800" height="400">

Go back to your first browser tab and click on "Manage Website", which appears when you hover the mouse over it.<br>
<img alt="Step 4" src="https://github.com/louis-e/PSL-Leaderboard-System/blob/master/img/step4.png" width="200" height="250">

On the left panel you have to click on "Tools"<br>
<img alt="Step 5" src="https://github.com/louis-e/PSL-Leaderboard-System/blob/master/img/step5.png" width="225" height="200">

After that click on "Database Manager"<br>
<img alt="Step 6" src="https://github.com/louis-e/PSL-Leaderboard-System/blob/master/img/step6.png" width="300" height="400">

Now you should see the following panel. Click on "New Database"<br>
<img alt="Step 7" src="https://github.com/louis-e/PSL-Leaderboard-System/blob/master/img/step7.png" width="700" height="300">

Enter a name for your database, a username and a password and click on "Create". Don't forget to write the database name down.<br>
<img alt="Step 8" src="https://github.com/louis-e/PSL-Leaderboard-System/blob/master/img/step8.png" width="700" height="400">

Now you have to drag the five scripts and drop it into the second tab to uploud the scripts to your webserver.<br>
<img alt="Step 9" src="https://github.com/louis-e/PSL-Leaderboard-System/blob/master/img/step9.png" width="800" height="400">

Then you have to select each script individually and click on "edit".<br>
<img alt="Step 10" src="https://github.com/louis-e/PSL-Leaderboard-System/blob/master/img/step10.png" width="900" height="200">

You have to change in each script something:<br>
*setup.php, addScore.php, getScore.php, administrationpanel.php:*
```
$servername should be "localhost"
$username should be the username of the database
$password should be the password of the database
$dbname should be the name of the database
```
*administrationpanel.php, login.php:*
```
$password should be a password which you need to enter the administrationpanel
```

Don't worry, nobody can see your password in the files.







### Links to the scripts you need
The scripts which are listed down have to be moved onto your webserver.

| Name | Link |
| ------ | ------ |
| setup.php | https://github.com/louis-e/PSL-Leaderboard-System/blob/master/setup.php |
| addScore.php | https://github.com/louis-e/PSL-Leaderboard-System/blob/master/addScore.php |
| getScore.php | https://github.com/louis-e/PSL-Leaderboard-System/blob/master/getScore.php |
| administrationpanel.php | https://github.com/louis-e/PSL-Leaderboard-System/blob/master/administrationpanel.php |
| login.php | https://github.com/louis-e/PSL-Leaderboard-System/blob/master/login.php |


### Unity/C# Example
```
using UnityEngine;
using System.Net;

public class PSL : MonoBehaviour
{
    string url = "https://mywebsite.com";

    public void addScores(string username, int score)
    {
        WebClient wc = new WebClient();
        wc.DownloadString(url + "/addScore.php?name=" + username + "&score=" + score);
    }

    public void getScores()
    {
        WebClient wc = new WebClient();
        Debug.Log(wc.DownloadString(url + "/getScore.php").Replace("<br>", "\n"));
    }
}
```



### Annotation
This project is completely non commercial and also open source. Feel free to develop new functions.

PSL is not 100% secure. It can be manipulated by spying the network traffic or by decompiling your application. Use at your own risk.

Readme V1.0


License
----

MIT License

Copyright (c) 2019 louis-e

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
