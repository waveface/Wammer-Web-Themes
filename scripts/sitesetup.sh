#!/bin/sh

webdir="/mnt/www"
sitedir="/mnt/WavefaceWebBlog/current/wp"
mdirs="blog/wp-content/themes support/wp-content/themes" 
setup_links()
{
	dstdir="$sitedir"
	for dn in $mdirs ; do
	srcdir="$webdir/$dn"
	if [ ! -L "$srcdir" ]; then
	     echo test:mv -f "$srcdir" "${srcdir}.orig"
	     #mv -f "$srcdir" "${srcdir}.orig"
	     echo test:ln -sf "$dstdir" "${srcdir}" 
	     #ln -sf "$dstdir" "${srcdir}" 
	else 
	     echo -n ">>> $srcdir ==>" 
	     cd "$srcdir"; pwd -LP
	fi
	done
}

update_perm()
{
	chown -R www-data www-data "$sitedir"
}

restore_links()
{
	for dn in $mdirs ; do
	srcdir="$webdir/$dn"
	dstdir="$sitedir/$dn"
	if [ -L "$srcdir" ]; then
	     rm -f "$srcdir" 
	     mv -f "${srcdir}.orig" "$srcdir"
	else 
	     echo -n ">>>origin $srcdir ==>" 
	     cd "$srcdir"; pwd -LP
	fi
	done
}

case $1 in
r*) # restore links
restore_links
;;
*)
update_perm
setup_links
;;
esac
