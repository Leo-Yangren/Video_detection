1.There are two folder in the zip. the folder called fingerprint is for the web
and the ont called open_cvtest is the source code for main process.

2. the main process source code is coded in Xcode. you can open it will Xcode,
	you need install opencv 3.2.4 (and its contribution )for it and ffmpeg.

3. before complie the source code, you need to change the path in some file

####in main.cpp you should change the code in line 25 and 28 to the path in your computer

####in Scene_detection.cpp you should change the code in line 12 and 15 to the path in your computer

4. compiler the source code and put the runnable software in folder staff.

5. the User Interface is in folder staff called "http://localhost/~Leo-Yang/fingerprint/staff/staff.single.php" in my computer

6.you should put the source movie in the folder staff too. 

7.file permission problem may happen, you need change the permission of file to 777.

8.movie_name.txt is used to save the path of source movie boundary images.

9.the input of main process is like ("./open_cvtest /Users/Leo-Yang/Sites/fingerprint/staff/upload/IMG_5549.MOV 1") 
   first parameter is for the name of main process, the second one is for the path of input movie
   the third is to decide the mode(1:for query , 2:for source movie build)


