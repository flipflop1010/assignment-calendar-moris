# Use a Node.js base image
FROM node:14

# Set the working directory
WORKDIR /var/www

# Install Laravel Echo Server globally
RUN npm install -g laravel-echo-server

# # Update deprecated packages
# RUN npm install -g npm-check-updates \
#     && ncu -u \
#     && npm install

RUN npm install 
# Expose the Laravel Echo Server port
EXPOSE 6001

# Start Laravel Echo Server
CMD ["laravel-echo-server", "start"]
