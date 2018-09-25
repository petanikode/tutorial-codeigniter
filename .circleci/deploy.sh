git clone --depth=1 https://github.com/petanikode/tutorial-codeigniter.git app
cd app
git config git-ftp.url $FTP_HOST
git config git-ftp.user $FTP_USER
git config git-ftp.password $FTP_PASS
git ftp init
