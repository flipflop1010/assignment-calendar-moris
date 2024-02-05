# FROM redis:alpine

# # Enable memory overcommit
# RUN echo "vm.overcommit_memory = 1" >> /etc/sysctl.conf \
#     && sysctl vm.overcommit_memory=1


# ===============================

# Dockerfile for Redis
FROM redis:alpine

# Copy the custom Redis configuration file
# COPY redis.conf /etc/redis.conf

# Use the custom configuration file
CMD ["redis-server", "/etc/redis.conf"]
