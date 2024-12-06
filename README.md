# inception2


## Clean up command:
```
docker ps -qa | xargs -r docker rm; docker images -qa | xargs -r docker rmi -f; docker volume ls -q | xargs -r docker volume rm; docker network ls -q | xargs -r docker network inspect --format '{{.Name}}' | grep -vE '^(bridge|host|none)$' | xargs -r docker network rm;
```

## Tutorial
https://medium.com/@ssterdev/inception-guide-42-project-part-i-7e3af15eb671


## Tutorial2
https://github.com/Forstman1/inception-42

## Tutorial3
https://github.com/vbachele/Inception/tree/main

## Portainer
https://www.youtube.com/watch?v=QBNaOdNSsx8

