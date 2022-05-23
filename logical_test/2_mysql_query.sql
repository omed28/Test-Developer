SELECT A.mhs_id,A.mhs_nim,A.mhs_nama 
FROM tb_mahasiswa A
LEFT JOIN tb_mahasiswa_nilai B WHERE B.mhs_id = A.mhs_id
LEFT JOIN tb_matakuliah C WHERE C.mk_id = b.mk_id

WHERE C.mk_kode = 'MK303'
ORDER BY C.nilai DESC LIMIT 1