FROM node:latest
RUN mkdir -p /usr/src/app/
RUN chown -R node:node /usr/src/app/
RUN npm install -g @vue/cli @vue/cli-service-global
WORKDIR /usr/src/app
USER node
