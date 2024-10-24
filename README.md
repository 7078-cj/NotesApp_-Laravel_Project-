to post more than 2mb u need to change these in the php.ini
<br>


post_max_size = 50M
<br>
upload_max_filesize = 50M
<br>
max_execution_time = 300
<br>
memory_limit = 128M


if the images dont show up

delete the storage file in the public folder then run this comman


php artisan storage:link
