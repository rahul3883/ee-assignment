# EE Package Manager

Package Manager for Easy Engine.

### Installation

```sh
$ cd ee-assignment
$ chmod +x ee
$ mv ee /usr/local/bin/
```

### Usage

```sh
ee <action> <package-name> [--os=<os-name>]
```
action could be `install`, `update` or `remove`.

### Install a package
```sh
ee install <package-name> [--os=<os-name>]
```

### Update a package
```sh
ee update <package-name> [--os=<os-name>]
```

### Remove a package
```sh
ee remove <package-name> [--os=<os-name>]
```

### Add Plugins

You can also add plugins for different package managers.
EE Package Manager has the following default plugins:

| Plugin | Supported OS |
| ------ | ------ |
| APT | Linux, OS1 |
| Brew | Mac, Darwin |
| PKG | FreeBDS |
