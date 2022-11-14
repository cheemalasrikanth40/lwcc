#!/bin/bash
USER_NAME = 'magento'
DB_PASSWORD = 'magento'
DB_NAME = 'magento'
SED='sed -re 's/DEFINER=`[^`]+`@`[^`]+`//''
DB_PATH= '/var/www/html/27-Sep-2022'
zcat '"${DB_PATH}"*.sql.gz' | "${SED}" | mysql -h 127.0.0.1 -u "${USER_NAME}" -p"${DB_PASSWORD}" "${DB_NAME}"
