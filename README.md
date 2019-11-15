## simple mvc php

### Todo
- helper
- orm

#### configuration with nginx
```

location / {
  if (!-e $request_filename){
    rewrite ^(.+)$ /index.php?url=$1 break;
  }
}

```