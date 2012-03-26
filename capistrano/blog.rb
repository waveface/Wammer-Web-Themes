set :application, "Waveface Blog"
set :use_sudo, true
set :scm_verbose, true
ssh_options[:keys] = [File.join(ENV["HOME"], ".ssh", "waveface-blog.pem")]
set :scm, "git"
set :repository,  "git@github.com:waveface/Wammer-Web-Themes.git"
set :user, "ubuntu"
set :deploy_via, :remote_cache
set :deploy_to, "/mnt/WavefaceWebBlog"
set :web_serv_name, "apache2"
set :branch, "master"
role :staging_blog, "blog.waveface.com"

namespace :deploy do
    desc "Initiate the target system environment."
    task :default do
        transaction do
            deploy.update
            deploy.setup
            deploy.restart
        end
    end

    # setup
    task :setup_web, :roles => :staging_blog do
	# add some for setup
    end

    # web action
    task :setup do
        setup_web
	run "#{sudo :as => 'root'} /bin/sh #{current_path}/scripts/sitesetup.sh"
    end

    task :stop_web, :roles => :staging_blog do
	#run "#{sudo :as => 'root'} service #{web_serv_name} stop"
    end

    task :start_web, :roles => :staging_blog do
	#run "#{sudo :as => 'root'} service #{web_serv_name} start"
    end

    task :restart_web, :roles => :staging_blog do
	#run "#{sudo :as => 'root'} service #{web_serv_name} restart"
    end
    
    # action
    desc "Stop the daemon"
    task :stop do
	deploy.stop_web
    end

    desc "Start the daemon"
    task :start do
	deploy.start_web
    end

    task :restart do
	deploy.restart_web
    end
end

