# repository info
set :branch, "development"

# This may be the same as your `Web` server
role :app, "ccistudios.com"

# directories
set :deploy_to, "/home/cunion/subdomains/dev"
set :public, "#{deploy_to}/public_html"
set :extensions, %w[public template]
