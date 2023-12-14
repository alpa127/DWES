select * from para as p
inner join mensaje as m using(idMen) inner join empleado as e on m.deEmpleado = e.idEmp inner join departamento as d on m.paraDEpartamento = d.idDep
where p.paraEmpleado = 7;