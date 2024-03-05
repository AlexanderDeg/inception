#!/bin/sh

if [ ! -f "ade-geor.42.fr.key" ] || [ ! -f "ade-geor.42.fr.crt" ]; then
	echo "Generating self-signed certificates..."
	openssl req -x509 -newkey rsa:4096 -keyout ade-geor.42.fr.key -out ade-geor.42.fr.crt -days 365 -nodes \
		-subj "/C=AU/ST=SA/L=Adelaide/O=42Adelaide/CN=ade-geor.42.fr"
	if [ $? -ne 0 ]; then
		echo "Failed to generate certificates."
	fi
	echo "Successfully generated certificates."
fi
