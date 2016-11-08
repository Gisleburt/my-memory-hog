My Memory Hog - Docker Image
============================

This container is designed to exhaust the memory constraints of the running
container.

Usage
-----

```bash
$ docker run -it --memory=128m --memory-swap=0 gisleburt/my-memory-hog
```

Note: If you don't restrict memory on the container, it will run to 1GB usage
before PHP kills the script itself.

