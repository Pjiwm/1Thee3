# 1T3
This is a group school project which I was a part of in the last semester of 2020/2021 (First Year). The goal of the project was mainly to practice working using the SCRUM Method and to learn to put the things we learnt about communication with clients into practice. We also learnt to use VueJS as, up to that point, we had no experience with it. I mainly worked on the logic in the pages that had to do with an interactive quiz (see the components that have "quiz" in the name).

A demonstration of the quiz component:

https://user-images.githubusercontent.com/20358521/159578092-3edf81e2-e507-4216-ac28-0b429687435b.mp4


## PHP
Part of the project runs with PHP and CRON jobs. This code is available on the website.


## Project setup - without Docker
```
https://nodejs.org/en/download/
```

### Install Vue CLI
```
npm install -g @vue/cli @vue/cli-service-global
```

### Installs all packages (Node 16 required)
```
npm install
```

### Compiles and hot-reloads for development
```
npm run serve
```


## Project setup - with Docker
```
https://www.docker.com/get-started
```

### Builds docker container
```
docker-compose build
```

### Installs npm packages
```
docker-compose run node npm i
```

### Starts container and starts application
```
docker-compose up
```

### Access container
```
docker exec -it 1_thee_3 /bin/sh
```

## Usage

### Compiles and minifies for production
```
npm run build
```

### Lints and fixes files
```
npm run lint
```

### For documentation Vue and Bootstrap Vue
```
https://vuejs.org/v2/guide/
https://bootstrap-vue.org/docs/
```

### Customize configuration
See [Configuration Reference](https://cli.vuejs.org/config/).
