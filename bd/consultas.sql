select U.cod_usu,V.cod_vi,Pt.cod_pt, M.fcod_usu,M.fcod_pt,M.fcod_vi
from usuario as U, vigilante as V, puesto_de_trabajo as Pt , minuta as M
where fcod_usu = cod_usu, fcod_pt = cod_pt, fcod_vi = cod_vi;



select mi.cod_min,mi.hora_entrada,mi.hora_salida,mi.fecha_min,usu.nom_usu,vi.nom_vi
    from minuta as mi, usuario as usu, vigilante as vi
        where mi.fcod_usu = usu.cod_usu and mi.fcod_vi = vi.cod_vi;