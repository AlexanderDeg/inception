FROM alpine:3.18

RUN apk update && apk upgrade && apk add --no-cache nginx \
	openssl curl ca-certificates

RUN mkdir -p /ssl
COPY ./requirements/nginx/tools/script.sh /
RUN sh /script.sh
RUN mv /ade-geor.42.fr.key /ssl/ade-geor.42.fr.key
RUN mv /ade-geor.42.fr.crt /ssl/ade-geor.42.fr.crt

EXPOSE 443

CMD ["nginx", "-g", "daemon off;"]
