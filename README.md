# Heru Kurniawan - Techtask (Nov 2019)

## Installation
  
- Clone this repo
```
$ git clone git@github.com:h312u/kurniawan-heru-techtask-201911.git
```
- Enter the directory
```
$ cd kurniawan-heru-techtask-201911
```
- Building images and running the container
```
$ sh server-run.sh
```

## Testing
- Access http://127.0.0.1:8080 or http://localhost:8080 using your favourite browser

![index](https://i.ibb.co/FH9pyR0/Screenshot-from-2019-11-22-01-38-20.png)

- Access http://127.0.0.1:8080/lunch or http://localhost:8080/lunch using POSTMAN (with GET method) or you can using your favourite browser also

![lunch](https://i.ibb.co/VQX3dqb/Screenshot-from-2019-11-22-01-41-56.png)


## Stopping
- Since the service running in daemon-mode, you can stopping the service using this command
```
$ sh server-stop.sh
```