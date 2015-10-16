#!/bin/bash
. dire.cfg
screen -d -m -S csgoretake "$direction"srcds_run -game csgo -usercon +game_type 0 +game_mode 1 +mapgroup mg_active +map de_dust2 -tickrate 128 -exec autoexec.cfg +hostname "WeLoveGaming" +rcon_password "fuckuhard"
