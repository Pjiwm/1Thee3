FROM node:latest
RUN mkdir -p /usr/src/app/
WORKDIR /usr/app
COPY ./ /usr/app
RUN chown -R node:node /usr/src/app/
RUN npm install -g @vue/cli @vue/cli-service-global
RUN npm i
WORKDIR /usr/src/app
USER node
